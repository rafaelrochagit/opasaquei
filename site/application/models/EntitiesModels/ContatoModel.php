<?php



include_once(APPPATH . "models/" . 'Model' . EXT);



/*Use Entities\Contato;*/



/**

 * Description of ContatoModel

 * Model from:

 * @var Contato

 * 

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 */

class ContatoModel extends Model {



    const name = 'EntitiesModels\ContatoModel';



    /**

     * 

     * @return Contato

     */

    public function getEntity() {

       /* return Contato::name;*/

       return '';

    }





    public function getTable() {

        return 'tbl_contato';

    }



}

