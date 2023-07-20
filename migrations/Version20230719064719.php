<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230719064719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bon_de_commande (id INT AUTO_INCREMENT NOT NULL, code_commande VARCHAR(255) NOT NULL, reference_facture VARCHAR(255) NOT NULL, reference_facture_fornisseur VARCHAR(255) NOT NULL, reference_facture_embarquement VARCHAR(255) NOT NULL, date_arrive DATETIME DEFAULT NULL, prevision_date_arrive DATETIME DEFAULT NULL, delai_import VARCHAR(255) DEFAULT NULL, type_commande VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, tarif_applique INT DEFAULT NULL, fret DOUBLE PRECISION DEFAULT NULL, a_compte_payer INT DEFAULT NULL, volume_commande DOUBLE PRECISION DEFAULT NULL, pat_commande DOUBLE PRECISION DEFAULT NULL, vol_reel DOUBLE PRECISION DEFAULT NULL, frai DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C54C8C93 FOREIGN KEY (type_id) REFERENCES type_art (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66C54C8C93 ON article (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bon_de_commande');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C54C8C93');
        $this->addSql('DROP INDEX IDX_23A0E66C54C8C93 ON article');
        $this->addSql('ALTER TABLE article DROP type_id');
    }
}
