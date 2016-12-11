<?php

namespace AppBundle\Controller;


use AppBundle\Model\Database\Schema;
use AppBundle\Model\Database\Table;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSession()
    {
        return $this->get('session');
    }

    /**
     * @return Schema|null
     */
    public function getSchema()
    {
        return $this->getSession()->get('schema', null);
    }

    /**
     * @return Table|null
     */
    public function getDatabase()
    {
        return $this->getSession()->get('table', null);
    }
}
