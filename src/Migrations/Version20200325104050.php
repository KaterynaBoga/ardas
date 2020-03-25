<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200325104050 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE attribute_value DROP FOREIGN KEY FK_FE4FBB824584665A');
        $this->addSql('ALTER TABLE attribute_value DROP FOREIGN KEY FK_FE4FBB82B6E62EFA');
        $this->addSql('ALTER TABLE attribute_value ADD CONSTRAINT FK_FE4FBB824584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attribute_value ADD CONSTRAINT FK_FE4FBB82B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attribute (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE attribute_value DROP FOREIGN KEY FK_FE4FBB824584665A');
        $this->addSql('ALTER TABLE attribute_value DROP FOREIGN KEY FK_FE4FBB82B6E62EFA');
        $this->addSql('ALTER TABLE attribute_value ADD CONSTRAINT FK_FE4FBB824584665A FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE attribute_value ADD CONSTRAINT FK_FE4FBB82B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attribute (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
