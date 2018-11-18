<?php



include_once(APPPATH . "models/" . 'Model' . EXT);



Use Entities\Portfolio;



/**

 * Description of PortfolioModel

 * Model from:

 * @var PortfolioModel

 * 

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 */

class PortfolioModel extends Model {



    const name = 'EntitiesModels\PortfolioModel';



    /**

     * 

     * @return Portfolio

     */

    public function getEntity() {

        return Portfolio::name;

    }





    public function getTable() {

        return 'tbl_portfolio';

    }



}

