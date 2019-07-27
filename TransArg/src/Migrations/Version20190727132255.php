<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190727132255 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partenaire ADD depot_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA3738510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id)');
        $this->addSql('CREATE INDEX IDX_32FFA3738510D4DE ON partenaire (depot_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partenaire DROP FOREIGN KEY FK_32FFA3738510D4DE');
        $this->addSql('DROP INDEX IDX_32FFA3738510D4DE ON partenaire');
        $this->addSql('ALTER TABLE partenaire DROP depot_id');
    }
}
