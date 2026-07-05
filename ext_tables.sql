CREATE TABLE tx_ticketsystem_domain_model_event (
                                                    uid INT AUTO_INCREMENT PRIMARY KEY,
                                                    pid INT DEFAULT 0 NOT NULL,
                                                    tstamp INT DEFAULT 0 NOT NULL,
                                                    crdate INT DEFAULT 0 NOT NULL,
                                                    deleted TINYINT DEFAULT 0 NOT NULL,
                                                    hidden TINYINT DEFAULT 0 NOT NULL,

                                                    titel VARCHAR(255) DEFAULT '' NOT NULL,
                                                    beschreibung TEXT,
                                                    datum INT(11) DEFAULT 0 NOT NULL,
                                                    ort VARCHAR(255) DEFAULT '' NOT NULL,
                                                    bild INT(11) UNSIGNED DEFAULT 0 NOT NULL,
                                                    karten INT DEFAULT 0 NOT NULL
);

CREATE TABLE tx_ticketsystem_domain_model_karte (
                                                    uid INT AUTO_INCREMENT PRIMARY KEY,
                                                    pid INT DEFAULT 0 NOT NULL,
                                                    tstamp INT DEFAULT 0 NOT NULL,
                                                    crdate INT DEFAULT 0 NOT NULL,
                                                    deleted TINYINT DEFAULT 0 NOT NULL,
                                                    hidden TINYINT DEFAULT 0 NOT NULL,

                                                    event INT DEFAULT 0 NOT NULL,
                                                    titel VARCHAR(255) DEFAULT '' NOT NULL,
                                                    ticket_typ VARCHAR(255) DEFAULT '' NOT NULL,
                                                    grund_preis DECIMAL(10,2) DEFAULT '0.00' NOT NULL,
                                                    gekauft_am INT(11) DEFAULT 0 NOT NULL,
                                                    spiel_tag INT(11) DEFAULT 0 NOT NULL,
                                                    beschreibung TEXT
);

CREATE TABLE tx_ticketsystem_domain_model_kunde (
                                                    uid INT AUTO_INCREMENT PRIMARY KEY,
                                                    pid INT DEFAULT 0 NOT NULL,
                                                    tstamp INT DEFAULT 0 NOT NULL,
                                                    crdate INT DEFAULT 0 NOT NULL,
                                                    deleted TINYINT DEFAULT 0 NOT NULL,
                                                    hidden TINYINT DEFAULT 0 NOT NULL,

                                                    vorname VARCHAR(255) DEFAULT '' NOT NULL,
                                                    nachname VARCHAR(255) DEFAULT '' NOT NULL,

                                                    email VARCHAR(255) DEFAULT '' NOT NULL,

);

CREATE TABLE tx_ticketsystem_domain_model_buchung (
                                                      uid INT AUTO_INCREMENT PRIMARY KEY,
                                                      pid INT DEFAULT 0 NOT NULL,
                                                      tstamp INT DEFAULT 0 NOT NULL,
                                                      crdate INT DEFAULT 0 NOT NULL,
                                                      deleted TINYINT DEFAULT 0 NOT NULL,
                                                      hidden TINYINT DEFAULT 0 NOT NULL,

                                                      event INT DEFAULT 0 NOT NULL,
                                                      haupt_kunde INT DEFAULT 0 NOT NULL,
                                                      buchungsdatum INT(11) DEFAULT 0 NOT NULL,
                                                      positionen INT DEFAULT 0 NOT NULL,
                                                      mitreisende INT DEFAULT 0 NOT NULL
);

CREATE TABLE tx_ticketsystem_domain_model_buchungsposition (
                                                               uid INT AUTO_INCREMENT PRIMARY KEY,
                                                               pid INT DEFAULT 0 NOT NULL,
                                                               tstamp INT DEFAULT 0 NOT NULL,
                                                               crdate INT DEFAULT 0 NOT NULL,
                                                               deleted TINYINT DEFAULT 0 NOT NULL,
                                                               hidden TINYINT DEFAULT 0 NOT NULL,

                                                               buchung INT DEFAULT 0 NOT NULL,
                                                               karte INT DEFAULT 0 NOT NULL,
                                                            menge INT DEFAULT 1 NOT NULL,

                                                               einzel_preis DECIMAL(10,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_ticketsystem_buchung_mitreisende_mm (
                                                        uid_local INT NOT NULL,
                                                        uid_foreign INT NOT NULL,
                                                        sorting INT DEFAULT 0
);