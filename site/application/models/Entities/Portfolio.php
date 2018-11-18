<?php



namespace Entities;



Use \Doctrine\Common\Collections\ArrayCollection;



/**

 * Portfolio

 *

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 * 

 * @Entity

 * @Table(name="tbl_portfolio")

 */

class Portfolio extends AbstractEntity {



    const name = "Entities\Portfolio";



    public function __construct() {

        $this->imagens = new ArrayCollection();

    }



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

     * @Column(type="string", length=200, nullable=false)

     */

    private $link;



    /**

     *

     * @var TipoPortfolio

     * 

     * @ManyToOne(targetEntity="TipoPortfolio", fetch="EAGER")

     * @JoinColumn(name="tipo", referencedColumnName="id")

     */

    private $tipo;





    /**

     *

     * @var PortfolioImagem

     * 

     * @OneToMany(targetEntity="PortfolioImagem", mappedBy="portfolio")

     */

    private $imagens;





    /**

     *

     * @var string

     * 

     * @Column(type="string", length=300, nullable=false)

     */

    private $capa;











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

     * Gets the value of link.

     *

     * @return string

     */

    public function getLink()

    {

        return $this->link;

    }



    /**

     * Sets the value of link.

     *

     * @param string $link the link

     *

     * @return self

     */

    private function setLink($link)

    {

        $this->link = $link;



        return $this;

    }



    /**

     * Gets the value of tipo.

     *

     * @return Tipo

     */

    public function getTipo()

    {

        return $this->tipo;

    }



    /**

     * Sets the value of tipo.

     *

     * @param Tipo $tipo the tipo

     *

     * @return self

     */

    private function setTipo(Tipo $tipo)

    {

        $this->tipo = $tipo;



        return $this;

    }



    /**

     * Gets the value of imagens.

     *

     * @return PortfolioImagem

     */

    public function getImagens()

    {

        return $this->imagens->toArray();

    }



    /**

     * Sets the value of imagens.

     *

     * @param PortfolioImagem $imagens the imagens

     *

     * @return self

     */

    private function setImagens($imagens)

    {

         if (is_array($imagens)) {

            foreach ($imagens as $i) {

                $this->imagens->add($i);

            }

        }



        return $this;

    }





    public function clearImagens() {

        $this->imagens->clear();

    }



    /**

     * Gets the value of capa.

     *

     * @return string

     */

    public function getCapa()

    {

        return $this->capa;

    }



    /**

     * Sets the value of capa.

     *

     * @param string $capa the capa

     *

     * @return self

     */

    private function setCapa($capa)

    {

        $this->capa = $capa;



        return $this;

    }

}

