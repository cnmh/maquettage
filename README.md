# Maquettage AdminLTE


### Travail à faire

* Création d'un projet Laravel
* Installation d'AdminLTE
* Rédaction du fichier README
* Mise en place des fonctionnalités de base d'AdminLTE (ex: menu latéral, barre de navigation, etc.)
* Adaptation du design aux besoins du projet

### Critères de validation

* Le projet Laravel est fonctionnel.
* AdminLTE est correctement installé et configuré.
* Le fichier README est clair et complet.
* Les fonctionnalités de base d'AdminLTE sont implémentées.
* Le design est adapté aux besoins du projet.

### Les étapes de l'installation d'AdminLTE

**1. Installation des prérequis**

* Node.js
* NPM
* PHP 7.2.5 ou supérieur
* Un serveur web (Apache, Nginx, etc.)

**2. Création d'un projet Laravel**

```
composer create-project laravel/laravel mon-projet
```

**3. Installation d'AdminLTE**

```
npm install admin-lte@3.1.0 @fortawesome/fontawesome-free
```

**4. Publication des assets**

```
php artisan vendor:publish --provider="AdminLTE\AdminLTEServiceProvider"
```

**5. Importation des CSS et JavaScript**

Dans `public/css/app.css`, importer les CSS d'AdminLTE et Font Awesome :

```css
@import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
@import 'admin-lte/dist/css/adminlte.min.css';
```

Dans `public/js/app.js`, importer le JavaScript d'AdminLTE :

```javascript
import 'admin-lte/dist/js/adminlte';
```

**6. Configuration de la base de données**

Si nécessaire, configurer la connexion à la base de données dans le fichier `.env`.

**7. Démarrage du serveur de développement**

```
php artisan serve
```

**8. Utilisation d'AdminLTE**

Utiliser les templates et les composants d'AdminLTE dans vos vues Blade.

**9. Adaptation du design**

Modifier les variables CSS d'AdminLTE ou créer votre propre thème pour adapter le design aux besoins du projet.

**Ressources utiles**

* Documentation d'AdminLTE : [https://adminlte.io/docs/3.1/](https://adminlte.io/docs/3.1/)
* Tutoriels Laravel : [https://laracasts.com/](https://laracasts.com/)
* Forum de la communauté Laravel : [https://laracasts.com/discuss](https://laracasts.com/discuss)



