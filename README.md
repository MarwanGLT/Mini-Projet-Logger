# Mini-Projet-Logger : journalisation d'une application web PHP

Projet réalisé en BTS SIO. Le point de départ est un mini réseau social en PHP (« MiniTwit ») fourni **sans aucun journal**. Mon travail : y ajouter une journalisation des actions sensibles, pour pouvoir retracer qui a fait quoi, quand et depuis où.

## Ce que j'ai ajouté

- Une fonction `write_log()` (fichier `logger.php`) qui écrit chaque événement dans `app.log`.
- Chaque ligne contient : **date et heure, adresse IP, type d'action, niveau, utilisateur, message**.
- Les actions tracées : inscription, connexion, déconnexion, publication, modification du profil, abonnement et désabonnement.

Extrait de `app.log` :

```
2026-09-24 15:27:12 | [::1] | [INSCR] | [INFO] | [chaumes] | [Nouvelle inscription de : chaumes]
2026-09-24 15:27:29 | [::1] | [FLW] | [INFO] | [chaumes] | [S'est abonné(e) à Marwan]
2026-09-24 15:28:26 | [::1] | [LOGIN] | [INFO] | [azerty] | [Connexion réussie]
```

## Pourquoi c'est utile

Sans journal, une connexion frauduleuse ou une action malveillante ne laisse aucune trace. Ces journaux sont la base pour détecter une anomalie, et ils peuvent ensuite être envoyés vers un serveur central : voir mon projet [centralisation-logs-rsyslog](https://github.com/MarwanGLT/centralisation-logs-rsyslog).

## Pistes d'amélioration

- Utiliser les niveaux WARNING et ERROR (par exemple pour les échecs de connexion).
- Ajouter un identifiant de corrélation par requête.
- Envoyer les journaux vers syslog plutôt qu'un fichier local.

---

## Énoncé d'origine du starter

### MiniTwit (PHP) — AUCUN LOG (Starter pour exercice de LOG)

Ce mini-twitter *ne log rien* volontairement, afin que vos étudiant·e·s ajoutent ensuite une stratégie de logging (fichiers, BDD, syslog, Monolog, etc.).

## Installation rapide

1. Créez une base `mini_twitter` sur MySQL/MariaDB.
2. Importez `init.sql`.
3. Copiez tout le dossier sur un serveur PHP 8+ (Apache recommandé).  
   - Configurez un virtual host ou utilisez `http://localhost/mini-twitter/`.
4. Ajustez les variables DB dans `config.php` si besoin (`DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS` via env ou directement).
5. Ouvrez le site et créez un compte.

## Fonctionnalités
- Inscription, connexion, déconnexion
- Édition du profil (bio, avatar URL)
- Publier un post (280 caractères)
- Suivre / ne plus suivre des utilisateurs
- Fil d'actualités (soi + abonnements)
- Pages utilisateurs et recherche

## Pistes d'exercice LOG (à ajouter par les étudiant·e·s)
- Journaliser les actions sensibles (auth, follow/unfollow, post) avec niveaux (INFO, WARNING, ERROR).
- Tracer l’IP, l’agent utilisateur, l’ID utilisateur, l’horodatage.
- Ajouter un corrélation ID par requête.
- Capturer les erreurs/Exceptions et les consigner.
- Exposer une page d’administration des logs ou exporter vers un SIEM.

> Le code actuel n’écrit **aucun** log.
