<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170821201332 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE search (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, category VARCHAR(255) DEFAULT NULL, subcategory VARCHAR(255) DEFAULT NULL, job_type VARCHAR(255) DEFAULT NULL, budget VARCHAR(255) DEFAULT NULL, location VARCHAR(255) DEFAULT NULL, client_history VARCHAR(255) DEFAULT NULL, keyword_search VARCHAR(255) DEFAULT NULL, stop_words VARCHAR(255) DEFAULT NULL, skills VARCHAR(255) DEFAULT NULL, verified_payment VARCHAR(255) DEFAULT NULL, money_spent VARCHAR(255) DEFAULT NULL, client_preferred_hours_of_experience VARCHAR(255) DEFAULT NULL, client_preferred_freelancer_location VARCHAR(255) DEFAULT NULL, client_english_level_preference VARCHAR(255) DEFAULT NULL, client_timezone VARCHAR(255) DEFAULT NULL, chars_in_description VARCHAR(255) DEFAULT NULL, client_feedback_score VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_B4F0DBA75E237E06 (name), INDEX IDX_B4F0DBA7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE search ADD CONSTRAINT FK_B4F0DBA7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE search DROP FOREIGN KEY FK_B4F0DBA7A76ED395');
        $this->addSql('DROP TABLE search');
        $this->addSql('DROP TABLE user');
    }
}
