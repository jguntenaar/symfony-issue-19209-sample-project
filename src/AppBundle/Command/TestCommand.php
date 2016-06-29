<?php

namespace AppBundle\Command;

use AppBundle\Entity\Foobar;
use AppBundle\Form\FoobarType;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:test')

        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine.orm.default_entity_manager');

        $foobar = new Foobar();

        $formFactory = $this->getContainer()->get('form.factory');
        $form = $formFactory->create(FoobarType::class, $foobar, array('method' => 'POST'));

        $parameters = [
            'beer' => 'Heineken',
            'cake' => 'Grandmothers cake'
        ];

        $form->submit($parameters, true);

        if (!$form->isValid()) {
            //Handle error
        }

        $em->persist($foobar);
        $em->flush();
    }
}
