<?php
/**
 * Created by PhpStorm.
 * User: Pierre-Sylvain
 * Date: 30-07-17
 * Time: 19:35
 */

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testEnity()
    {
        $user = new User();
        $user->setName('test');
        $this->assertEquals('test',$user->getName());

        $user->setEmail('test@test.com');
        $this->assertEquals('test@test.com',$user->getEmail());

        $user->setPassword('password');
        $this->assertEquals('password',$user->getPassword());

        $user->setRole('password');
        $this->assertEquals('password',$user->getRole());

        $this->assertNull($user->getSalt());

        $this->assertEquals('test@test.com',$user->getUsername());

    }
}
