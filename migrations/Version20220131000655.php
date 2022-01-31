<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220131000655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, präoduct_title, label, product_name FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, prï¿½oduct_title VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL COLLATE BINARY, product_name VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO product (id, prï¿½oduct_title, label, product_name) SELECT id, präoduct_title, label, product_name FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, prï¿½oduct_title, label, product_name FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, präoduct_title VARCHAR(255) NOT NULL COLLATE BINARY, label VARCHAR(255) NOT NULL, product_name VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO product (id, präoduct_title, label, product_name) SELECT id, prï¿½oduct_title, label, product_name FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }
}
