<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Player
 *
 * Esta é a classe responsável por retornar os blogs mais votados.
 *
 * @package	CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author	David Ruiz
 * @link	http://www.timepix.com.br/
*/


class Ranking extends REST_Controller
{


    function list_get ()
    {
        

        $qb = $this->em->createQueryBuilder();
        $qb->select('count(b.id) as votos, b.name as blog, b.url as endereco, u.name as responsavel, u.email, b.id as blogId')
           ->from('Entity\BlogVote', 'bv')
           ->join('bv.blog', 'b')
           ->join('b.user', 'u')
           ->orderBy('votos', "DESC")
           ->groupBy('b.id');

        $query = $qb->getQuery();
        $gifts = $query->getResult();

        $this->response($gifts, 200);
    }
 
}