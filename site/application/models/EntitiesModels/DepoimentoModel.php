<?php



include_once(APPPATH . "models/" . 'Model' . EXT);



Use Entities\Depoimento;



/**

 * Description of DepoimentoModel
 * Model from:
 * @var DepoimentoModel
 * 
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class DepoimentoModel extends Model {

    const name = 'EntitiesModels\DepoimentoModel';

    /**
     * 
     * @return Depoimento
     */

    public function getEntity() {

        return Depoimento::name;

    }





    public function getTable() {

        return 'tbl_depoimento';

    }



}

