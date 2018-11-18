<?php



include_once(APPPATH . "models/" . 'Model' . EXT);



Use Entities\TipoPortfolio;



/**

 * Description of TipoPortfolioModel

 * Model from:

 * @var TipoPortfolioModel

 * 

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 */

class TipoPortfolioModel extends Model {



    const name = 'EntitiesModels\TipoPortfolioModel';



    /**

     * 

     * @return Portfolio

     */

    public function getEntity() {

        return TipoPortfolio::name;

    }





    public function getTable() {

        return 'tbl_tipo_portfolio';

    }



}

