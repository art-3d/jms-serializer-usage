<?php
namespace Test;

use Test\DTO\{
	Company,
	Message,
	User
};
use JMS\Serializer\SerializerBuilder;
use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

AnnotationDriver::registerAnnotationClasses();



class Application
{
	public function main()
	{
		$company = new Company();
		$company->setTitle('Discovery');

		$message = new Message();
		$message->setContent('lorem ipsum content');
		$message->addImage('one.jpg');
		$message->addImage('two.jpg');

		$message2 = new Message();
		$message2->setContent('lorem ipsum second content');
		$message2->addImage('three.png');
		$message2->addImage('four.png');

		$user = new User();
		$user->setName('Art');
		$user->setCompany($company);
		$user->addMessage($message);
		$user->addMessage($message2);

		$serializer = SerializerBuilder::create()->build();
		$data = $serializer->serialize($user, 'json');
        $user1 = $serializer->deserialize($data, User::class,'json');

        /* Configuration */
		$config = new Configuration();
		$config->setProxyDir('/path/to/generate/proxies');
		$config->setProxyNamespace('Proxies');
		$config->setHydratorDir('/path/to/generate/hydrators');
		$config->setHydratorNamespace('Hydrators');
		$config->setMetadataDriverImpl(AnnotationDriver::create('/path/to/document/classes'));
		$dm = DocumentManager::create(new Connection(), $config);

		$message = new \Test\Documents\Message;
		$message->setContent('lorem ipsum');
		$message->addImage('first.jpg');
		$message->addImage('second.jpg');

		$dm->persist($message);
		$dm->flush();
	}
}
