<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2018-03-23
 * Time: 11:36 PM
 */

namespace Blog\Entity;

use FOSUserBundleModelUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  public function __construct()
  {
    parent::__construct();
    // your own logic
  }
}