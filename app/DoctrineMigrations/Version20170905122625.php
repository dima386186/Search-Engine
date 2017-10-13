<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170905122625 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE search ADD filter_job_type VARCHAR(255) DEFAULT NULL, ADD filter_budget VARCHAR(255) DEFAULT NULL, ADD filter_experience_level VARCHAR(255) DEFAULT NULL, ADD filter_client_history VARCHAR(255) DEFAULT NULL, ADD filter_money_spent VARCHAR(255) DEFAULT NULL, ADD filter_skills VARCHAR(255) DEFAULT NULL, ADD filter_verified_payment VARCHAR(255) DEFAULT NULL, ADD filter_client_feedback_score VARCHAR(255) DEFAULT NULL, ADD filter_avg_rate VARCHAR(255) DEFAULT NULL, ADD filter_hours_billed VARCHAR(255) DEFAULT NULL, ADD filter_client_timezone VARCHAR(255) DEFAULT NULL, ADD filter_my_previous_client VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE search DROP filter_job_type, DROP filter_budget, DROP filter_experience_level, DROP filter_client_history, DROP filter_money_spent, DROP filter_skills, DROP filter_verified_payment, DROP filter_client_feedback_score, DROP filter_avg_rate, DROP filter_hours_billed, DROP filter_client_timezone, DROP filter_my_previous_client');
    }
}
