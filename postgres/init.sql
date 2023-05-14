CREATE TABLE todo (
                      id SERIAL PRIMARY KEY,
                      title VARCHAR(255),
                      done BOOLEAN
);

CREATE INDEX idx_todo_done ON todo (done);

INSERT INTO todo (title, done)
SELECT x.title, x.done
FROM (VALUES
          ('Apprendre Docker', false),
          ('Faire le Projet Docker', true),
          ('Faire du sport', false),
          ('Faire les courses', true),
          ('Sortir le chien', false),
          ('Ranger la maison', true),
          ('Prendre un rendez-vous chez le coiffeur', true),
          ('Apprendre PHP', false),
          ('Préparer le repas ', true),
          ('Changer la déco de la chambre', true),
          ('Appeler Papa', false),
          ('Acheter un casque', true),
          ('Laver la voiture', false)
     ) AS x(title, done);
