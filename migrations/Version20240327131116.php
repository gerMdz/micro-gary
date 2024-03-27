<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327131116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE producto (id INT AUTO_INCREMENT NOT NULL, precio INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producto_promotion (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, promotion_id INT NOT NULL, valido_to DATETIME DEFAULT NULL, INDEX IDX_378CC8FB7645698E (producto_id), INDEX IDX_378CC8FB139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, tipo VARCHAR(255) NOT NULL, ajuste DOUBLE PRECISION NOT NULL, criteria JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE producto_promotion ADD CONSTRAINT FK_378CC8FB7645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
        $this->addSql('ALTER TABLE producto_promotion ADD CONSTRAINT FK_378CC8FB139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE producto_promotion DROP FOREIGN KEY FK_378CC8FB7645698E');
        $this->addSql('ALTER TABLE producto_promotion DROP FOREIGN KEY FK_378CC8FB139DF194');
        $this->addSql('DROP TABLE producto');
        $this->addSql('DROP TABLE producto_promotion');
        $this->addSql('DROP TABLE promotion');
    }
}
