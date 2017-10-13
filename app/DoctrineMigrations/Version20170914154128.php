<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170914154128 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE search DROP FOREIGN KEY FK_B4F0DBA77A7B643');
        $this->addSql('DROP INDEX UNIQ_B4F0DBA77A7B643 ON search');
        $this->addSql('ALTER TABLE search DROP result_id');
        $this->addSql('ALTER TABLE result DROP INDEX UNIQ_136AC113650760A9, ADD INDEX IDX_136AC113650760A9 (search_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE result DROP INDEX IDX_136AC113650760A9, ADD UNIQUE INDEX UNIQ_136AC113650760A9 (search_id)');
        $this->addSql('ALTER TABLE search ADD result_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE search ADD CONSTRAINT FK_B4F0DBA77A7B643 FOREIGN KEY (result_id) REFERENCES result (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B4F0DBA77A7B643 ON search (result_id)');
    }
}
