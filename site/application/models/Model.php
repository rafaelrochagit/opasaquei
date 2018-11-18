<?php



(defined('BASEPATH')) OR exit('No direct script access allowed');

require_once(BASEPATH . 'core/Model.php');



/*Use enums\TipoStatus;*/



/**

 * Model

 * @property \Doctrine\ORM\EntityManager $em Gerenciador de Entidade

 * @category Model

 * @package  CodeIgniter

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 */

abstract class Model extends CI_Model {



    /**

     * Constructor of  Model

     */

    function __construct() {

        parent::__construct();

        $this->em = $this->doctrine->em;

    }



    /**

     * 

     * @param String $id (Nome da entidade), Integer $id (id da entidade)

     * @return Object $result

     */

    public function retrieve($id) {

        try {

            $result = $this->em->find($this->getEntity(), $id);

            return $result;

        } catch (Exception $e) {

            echo 'Exceção capturada: ', $e->getTraceAsString();

        }

    }



       /**

     * Método retorna todos os albums ativos e marcado exibirPrincipal = 1

     * @param void

     * @return Slides (array)

     */

    public function retrieveAllByOrder($orderBy, $asc) {

        try {

            $repository = $this->em->getRepository($this->getEntity());

            $where = array();

            return $repository->findBy($where, array($orderBy => $asc));

        } catch (Exception $exc) {

            echo $exc->getTraceAsString();

        }

    }



    /**

     * 

     * @param String $entity (Nome da entidade) 

     * @return Array<Object> $results

     */

    public function retrieveAll() {

        try {

            $repository = $this->em->getRepository($this->getEntity());

            $result = $repository->findAll();

            return $result;

        } catch (Exception $e) {

            echo 'Exceção capturada: ', $e->getTraceAsString();

        }

    }



    /**

     * 

     * @param Object $entity (entidade a ser persistidada) 

     */

    public function saveOrUpdate($entity) {

        try {

            $this->em->persist($entity);

            $this->em->flush();

            return $entity->getId();

        } catch (Exception $exc) {

            throw $exc;

        }

    }



   /* public function nextIdAutoIncrement() {

        $DB1 = $this->load->database('banco2', TRUE);

        $dql = 'SELECT AUTO_INCREMENT '

                . ' FROM INFORMATION_SCHEMA.TABLES '

                . " WHERE TABLE_SCHEMA = '". $this->db->database. "'" 

                . " AND TABLE_NAME = '" . $this->getTable() . "'";

        $query = $DB1->query($dql);

        return $query->row(0)->AUTO_INCREMENT;

    }*/



    /**

     * 

     * @param Object $entity (a ser realizada o merge) 

     * @return Object Após o Merge

     */

    public function merge($entity) {

        try {

            return $this->em->merge($entity);

        } catch (Exception $exc) {

            echo $exc->getTraceAsString();

        }

    }



    /**

     * 

     * @param Object $entity (entidade a ser removida) 

     */

    public function delete($entity) {

        try {

            $this->em->remove($entity);

            $this->em->flush();

        } catch (Exception $exc) {

            throw $exc;

        }

    }



    /*/**

     * Inativa Entidades que têm um atributo do tipo:

     * @var Entities\Status

     * @param Object $id (entidade a ser inativada) 

    public function inativarStatus($id) {

        try {

            $entity = $this->em->find($this->getEntity(), $id);

            $inativo = (new TipoStatus())->retrieveReferencedEntity(TipoStatus::INATIVO);

            $entity->setStatus($inativo);

            $this->saveOrUpdate($entity);

        } catch (Exception $exc) {

            throw $exc;

        }

    }*/



    /**

     * Ativa Entidades que têm um atributo do tipo:

     * @var Entities\Status

     * @param Object $id (entidade a ser inativada) 

    public function ativarStatus($id) {

        try {

            $entity = $this->em->find($this->getEntity(), $id);

            $ativo = (new TipoStatus())->retrieveReferencedEntity(TipoStatus::ATIVO);

            $entity->setStatus($ativo);

            $this->saveOrUpdate($entity);

        } catch (Exception $exc) {

            throw $exc;

        }

    }

    */



    /**

     * 

     * @param Integer $id (id da entidade a ser removida) 

     */

    public function deleteById($id) {

        try {

            $entity = $this->em->find($this->getEntity(), $id);

            $this->delete($entity);

        } catch (Exception $exc) {

            throw $exc;

        }

    }



    /**

     * 

     * @param integer $id

     * @return array (onde campos das tabelas são os índices)

     */

    public function CI_buscarById($id, $tbl_index) {

        $this->db->where($tbl_index, $id);

        return $this->db->get($this->getTable())->row_array();

    }



    /*

     * 

     * Recebe um array $dados com os indices do array identicos aos indices da tabela do BD

     * Recebe uma string $tbl_index com o nome do indice da tabela do BD, caso a string é vazia

     * Faz um inserção se não faz um update.

     * 

     * @param array $dados. String $tbl_index

     * @return Integer $id

     */

    public function CI_saveOrUpdate($dados, $tbl_index) {

        try {

            if ($tbl_index != 'id') {

                $dados[$tbl_index] = $dados['id'];

                unset($dados['id']);

            }

            if ($dados[$tbl_index] == '') {

                unset($dados[$tbl_index]);

                $this->db->insert($this->getTable(), $dados);

                return $this->db->insert_id();

            }

            $this->db->where($tbl_index, $dados[$tbl_index]);

            $this->db->update($this->getTable(), $dados);

            return $dados[$tbl_index];

        } catch (Exception $e) {

            throw $e;

        }

    }



    public function CI_delete($name_index, $id) {

        try {

            $this->db->where($name_index, $id);

            $this->db->delete($this->getTable());

        } catch (Exception $e) {

            throw $e;

        }

    }



    abstract function getEntity();



    abstract function getTable();

}

