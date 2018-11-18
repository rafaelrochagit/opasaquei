<?php



namespace Entities;





/**

 * PortfolioImagem

 *

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 * 

 * @Entity

 * @Table(name="tbl_portfolio_imagem")

 */

class PortfolioImagem extends AbstractEntity {



    const name = "Entities\PortfolioImagem";





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

     * @Column(type="string", length=300, nullable=false)

     */

    private $imagem;



    // ...

    /**

     * Many Features have One Product.

     * @ManyToOne(targetEntity="Portfolio", inversedBy="imagens")

     * @JoinColumn(name="portfolio", referencedColumnName="id")

     */

    private $portfolio;





    /**

     *

     * @var string

     * 

     * @Column(type="string", length=100, nullable=false)

     */

    private $descricao;







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

     * Gets the Many Features have One Product.

     *

     * @return mixed

     */

    public function getPortfolio()

    {

        return $this->portfolio;

    }





    /**

     * Sets the Many Features have One Product.

     *

     * @param mixed $portfolio the portfolio

     *

     * @return self

     */

    private function setPortfolio($portfolio)

    {

        $this->portfolio = $portfolio;



        return $this;

    }







    /**

     * Gets the value of descricao.

     *

     * @return string

     */

    public function getDescricao()

    {

        return $this->descricao;

    }



    /**

     * Sets the value of descricao.

     *

     * @param string $descricao the descricao

     *

     * @return self

     */

    private function setDescricao($descricao)

    {

        $this->descricao = $descricao;



        return $this;

    }



    



    /**

     * Gets the value of imagem.

     *

     * @return string

     */

    public function getImagem()

    {

        return $this->imagem;

    }



    /**

     * Sets the value of imagem.

     *

     * @param string $imagem the imagem

     *

     * @return self

     */

    private function _setImagem($imagem)

    {

        $this->imagem = $imagem;



        return $this;

    }

}

