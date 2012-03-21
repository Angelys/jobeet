<?php

/**
 * JobeetCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetCategoryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobeetCategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetCategory');
    }
     public function getWithJobs()
  {
  $q = $this->createQuery('c')
      ->leftJoin('c.JobeetJobs j')
      ->where('j.expires_at > ?', date('Y-m-d h:i:s', time()));
 
    return $q->execute();
  }
}