<?php
namespace Test;

use Test\Models\{
	Company,
	Message,
	User
};
use JMS\Serializer\SerializerBuilder;

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
		$user->setMessage($message);

		$serializer = SerializerBuilder::create()->build();

		$data = $serializer->serialize($user, 'json');

        $user1 = $serializer->deserialize($data, User::class,'json');

        echo $user1->getCompany()->getTitle();
	}
}
