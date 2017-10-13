<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170920081714 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE resource (id INT AUTO_INCREMENT NOT NULL, job_type VARCHAR(255) DEFAULT NULL, tymezone VARCHAR(255) DEFAULT NULL, budget VARCHAR(255) DEFAULT NULL, candidates VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, past_hires VARCHAR(255) DEFAULT NULL, skills LONGTEXT DEFAULT NULL, verif_status VARCHAR(255) DEFAULT NULL, total_charge VARCHAR(255) DEFAULT NULL, workload VARCHAR(255) DEFAULT NULL, pref_location VARCHAR(255) DEFAULT NULL, english VARCHAR(255) DEFAULT NULL, feedback VARCHAR(255) DEFAULT NULL, total_hours VARCHAR(255) DEFAULT NULL, member_since VARCHAR(255) DEFAULT NULL, level VARCHAR(255) DEFAULT NULL, interviewees VARCHAR(255) DEFAULT NULL, avg_rate VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE resource');
    }
}
