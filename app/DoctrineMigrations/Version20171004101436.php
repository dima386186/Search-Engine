<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171004101436 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE search ADD keyword_search_in_any VARCHAR(255) DEFAULT NULL, ADD keyword_search_in_title VARCHAR(255) DEFAULT NULL, ADD keyword_search_in_description VARCHAR(255) DEFAULT NULL, ADD stop_words_in_any VARCHAR(255) DEFAULT NULL, ADD stop_words_in_title VARCHAR(255) DEFAULT NULL, ADD stop_words_in_description VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE search DROP keyword_search_in_any, DROP keyword_search_in_title, DROP keyword_search_in_description, DROP stop_words_in_any, DROP stop_words_in_title, DROP stop_words_in_description');
    }
}
