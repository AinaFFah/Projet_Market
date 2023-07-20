<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230719060226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, pic VARCHAR(255) DEFAULT NULL, code_article VARCHAR(9) DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, pcb DOUBLE PRECISION DEFAULT NULL, prix_achat DOUBLE PRECISION DEFAULT NULL, depot INT DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', prix_revient DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_art (id INT AUTO_INCREMENT NOT NULL, articles_id INT NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_FE2230B51EBAF6CC (articles_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_soary (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_841202F4E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE type_art ADD CONSTRAINT FK_FE2230B51EBAF6CC FOREIGN KEY (articles_id) REFERENCES article (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_art DROP FOREIGN KEY FK_FE2230B51EBAF6CC');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE type_art');
        $this->addSql('DROP TABLE user_soary');
    }
}
