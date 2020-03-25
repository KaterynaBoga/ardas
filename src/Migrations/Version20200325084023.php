<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200325084023 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO attribute (name) values ("рекомендованная площадь помещения"), ("цвет")');

    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE from attribute WHERE name in ("рекомендованная площадь помещения", "цвет")');

    }
}
