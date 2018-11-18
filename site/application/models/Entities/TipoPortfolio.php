<?php



namespace Entities;





/**

 * TipoPortfolio

 *

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 * 

 * @Entity

 * @Table(name="tbl_tipo_portfolio")

 */

class TipoPortfolio extends AbstractEntity {



    const name = "Entities\TipoPortfolio";





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

     * @Column(type="string", length=100, nullable=false)

     */

    private $nome;



    /**

     *

     * @var string

     * 

     * @Column(type="string", length=100, nullable=false)

     */

    private $alias;











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

     * Gets the value of nome.

     *

     * @return string

     */

    public function getNome()

    {

        return $this->nome;

    }



    /**

     * Sets the value of nome.

     *

     * @param string $nome the nome

     *

     * @return self

     */

    private function setNome($nome)

    {

        $this->nome = $nome;



        return $this;

    }







    /**

     * Gets the value of alias.

     *

     * @return string

     */

    public function getAlias()

    {

        return $this->alias;

    }



    /**

     * Sets the value of alias.

     *

     * @param string $alias the alias

     *

     * @return self

     */

    private function setAlias($alias)

    {

        $this->alias = $alias;



        return $this;

    }

}

