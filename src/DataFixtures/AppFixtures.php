<?php

namespace App\DataFixtures;


use App\Entity\User;
use App\Entity\UserReview;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }



    public function load(ObjectManager $manager)
    {


        $user = new User();
        $user->setUsername('MrAdmin');
        $user->setEmail('test@test.test');
        $user->setLocale('ua');
        $user->setRoles(['ROLE_ADMIN','ROLE_USER','ROLE_SONATA_ADMIN','ROLE_SUPER_ADMIN']);
        $password = $this->encoder->encodePassword($user, '123456');
        $user->setPassword($password);

        $manager->persist($user);

        $manager->flush();


        for($i=0; $i<35; $i++){
            $rew = new UserReview();
            $rew->setUsername('user_N_'.$i);
            $rew->setEMail($i.'000@gmail.com');
            $rew->setUserIp('127.0.0.1');
            $rew->setUserBrowser('error 404');
            $rew->setUserHomepage('https://google.com');
            $rew->setUserReview($i.' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');






            $manager->persist($rew);

            $manager->flush();
        }


    }
}
