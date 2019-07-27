<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190727200037 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partenaire DROP FOREIGN KEY FK_32FFA3738510D4DE');
        $this->addSql('ALTER TABLE partenaire DROP FOREIGN KEY FK_32FFA373A76ED395');
        $this->addSql('ALTER TABLE partenaire DROP FOREIGN KEY FK_32FFA373F2C56620');
        $this->addSql('DROP INDEX IDX_32FFA373A76ED395 ON partenaire');
        $this->addSql('DROP INDEX UNIQ_32FFA373F2C56620 ON partenaire');
        $this->addSql('DROP INDEX IDX_32FFA3738510D4DE ON partenaire');
        $this->addSql('ALTER TABLE partenaire DROP compte_id, DROP user_id, DROP depot_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6492FC0CB0F');
        $this->addSql('DROP INDEX IDX_8D93D6492FC0CB0F ON user');
        $this->addSql('ALTER TABLE user DROP transaction_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partenaire ADD compte_id INT NOT NULL, ADD user_id INT DEFAULT NULL, ADD depot_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA3738510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id)');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA373A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA373F2C56620 FOREIGN KEY (compte_id) REFERENCES compte (id)');
        $this->addSql('CREATE INDEX IDX_32FFA373A76ED395 ON partenaire (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_32FFA373F2C56620 ON partenaire (compte_id)');
        $this->addSql('CREATE INDEX IDX_32FFA3738510D4DE ON partenaire (depot_id)');
        $this->addSql('ALTER TABLE user ADD transaction_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6492FC0CB0F FOREIGN KEY (transaction_id) REFERENCES transaction (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6492FC0CB0F ON user (transaction_id)');
    }
}
