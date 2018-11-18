<?php



namespace Entities;



/**

 * Depoimento

 *

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 * 

 * @Entity

 * @Table(name="tbl_depoimento")

 */

class Depoimento extends AbstractEntity {



    const name = "Entities\Depoimento";



    /**

     *

     * @Id

     * @GeneratedValue(strategy="IDENTITY")

     * @Column(name="id", type="integer", nullable=false)

     */

    private $id;



    /**

     *

     * @var string

     * 

     * @Column(type="string", length=500, nullable=false)

     */

    private $declaracao;



    /**

     *

     * @var text

     * 

     * @Column(type="text",  length=150, nullable=false)

     */

    private $nome;



    /**

     *

     * @var text

     * 

     * @Column(type="text",  length=150, nullable=true)

     */

    private $email;



    /**

     *

     * @var string

     * 

     * @Column(type="string", length=300, nullable=false)

     */

    private $foto;





    /**

     *

     * @var \DateTime

     * 

     * @Column(type="date", nullable=false)

     */

    private $data;



    /**

     * 

     * Getters and Setters

     */



    /**

     * Gets the value of id.

     *

     * @return mixed

     */

    public function getId()

    {

        return $this->id;

    }



    /**

     * Sets the value of id.

     *

     * @param mixed $id the id

     *

     * @return self

     */

    private function setId($id)

    {

        $this->id = $id;



        return $this;

    }



    /**

     * Gets the value of declaracao.

     *

     * @return string

     */

    public function getDeclaracao()

    {

        return $this->declaracao;

    }



    /**

     * Sets the value of declaracao.

     *

     * @param string $declaracao the declaracao

     *

     * @return self

     */

    private function setDeclaracao($declaracao)

    {

        $this->declaracao = $declaracao;



        return $this;

    }



    /**

     * Gets the value of nome.

     *

     * @return text

     */

    public function getNome()

    {

        return $this->nome;

    }



    /**

     * Sets the value of nome.

     *

     * @param text $nome the nome

     *

     * @return self

     */

    private function setNome(text $nome)

    {

        $this->nome = $nome;



        return $this;

    }



    /**

     * Gets the value of email.

     *

     * @return text

     */

    public function getEmail()

    {

        return $this->email;

    }



    /**

     * Sets the value of email.

     *

     * @param text $email the email

     *

     * @return self

     */

    private function setEmail(text $email)

    {

        $this->email = $email;



        return $this;

    }



    /**

     * Gets the value of foto.

     *

     * @return string

     */

    public function getFoto()

    {

        return $this->foto;

    }



    /**

     * Sets the value of foto.

     *

     * @param string $foto the foto

     *

     * @return self

     */

    private function setFoto($foto)

    {

        $this->foto = $foto;



        return $this;

    }



    /**

     * Gets the value of data.

     *

     * @return \DateTime

     */

    public function getData()

    {

        return $this->data;

    }



    /**

     * Sets the value of data.

     *

     * @param \DateTime $data the data

     *

     * @return self

     */

    private function setData(\DateTime $data)

    {

        $this->data = $data;



        return $this;

    }

}

