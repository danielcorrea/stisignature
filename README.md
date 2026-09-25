GLPI STI Signature
🌎 English | 🇪🇸 Español | 🇫🇷 Français

 🇬🇧 English
Overview
STI Signature is a lightweight, secure, and fully integrated plugin for GLPI 11. It allows technicians and support staff to configure personalized, automatic signatures that are seamlessly appended to their ITIL Follow-ups and Ticket Solutions.

Features
Per-User Configuration: Each technician manages their own signature via a new tab in their GLPI "My Settings" profile.

Rich Text Support: Fully integrated with GLPI's native TinyMCE editor, allowing HTML formatting, bold text, colors, and images.

GLPI 11 Ready: Built specifically for the new strict architecture of GLPI 11 and PHP 8.4. It utilizes the native Migration orchestrator for database creation and modern pre_item_add hooks for secure text injection, completely bypassing deprecated raw queries.

Toggle On/Off: Users can easily activate or deactivate their automatic signature without deleting the text.

Requirements
GLPI >= 11.0.0

PHP >= 8.4

Installation
Download the latest release.

Extract the folder and rename it exactly to stisignature.

Move the folder to your GLPI plugins directory: glpi/plugins/stisignature.

Log into GLPI as a Super-Admin.

Navigate to Setup > Plugins.

Click Install and then Enable.

Usage
Click on your profile icon in the top right corner and select My Settings.

Navigate to the new tab My Signature (Tickets).

Select "Yes" to activate the signature.

Type and format your signature in the rich text editor.

Click Save. Your signature will now automatically appear at the bottom of your follow-ups and solutions.

 🇪🇸 Español
Descripción General
STI Signature es un plugin ligero, seguro y totalmente integrado para GLPI 11. Permite a los técnicos y al personal de soporte configurar firmas automáticas y personalizadas que se añaden de forma invisible a sus Seguimientos ITIL y Soluciones de Tickets.

Características
Configuración por Usuario: Cada técnico gestiona su propia firma a través de una nueva pestaña en su perfil de "Mis Ajustes" en GLPI.

Soporte de Texto Enriquecido: Totalmente integrado con el editor nativo TinyMCE de GLPI, permitiendo formato HTML, texto en negrita, colores e imágenes.

Preparado para GLPI 11: Construido específicamente para la nueva arquitectura estricta de GLPI 11 y PHP 8.4. Utiliza el orquestador nativo Migration para la creación de bases de datos y el moderno gancho pre_item_add para inyección segura de texto.

Activar/Desactivar: Los usuarios pueden activar o desactivar fácilmente su firma automática sin perder el texto guardado.

Requisitos
GLPI >= 11.0.0

PHP >= 8.4

Instalación
Descargue la última versión.

Extraiga la carpeta y renómbrela exactamente a stisignature.

Mueva la carpeta a su directorio de plugins de GLPI: glpi/plugins/stisignature.

Inicie sesión en GLPI como Super-Admin.

Navegue a Configuración > Plugins.

Haga clic en Instalar y luego en Activar.

Uso
Haga clic en el icono de su perfil en la esquina superior derecha y seleccione Mis Ajustes.

Vaya a la nueva pestaña Mi Firma (Casos).

Seleccione "Sí" para activar la firma.

Escriba y formatee su firma en el editor de texto enriquecido.

Haga clic en Guardar. Su firma aparecerá ahora automáticamente al final de sus seguimientos y soluciones.

 🇫🇷 Français
Aperçu
STI Signature est un plugin léger, sécurisé et entièrement intégré pour GLPI 11. Il permet aux techniciens et au personnel d'assistance de configurer des signatures automatiques personnalisées qui sont ajoutées de manière transparente à leurs Suivis ITIL et Solutions de Tickets.

Fonctionnalités
Configuration par Utilisateur : Chaque technicien gère sa propre signature via un nouvel onglet dans son profil "Mes Préférences" de GLPI.

Support du Texte Enrichi : Entièrement intégré à l'éditeur TinyMCE natif de GLPI, permettant le formatage HTML, le texte en gras, les couleurs et les images.

Prêt pour GLPI 11 : Conçu spécifiquement pour la nouvelle architecture stricte de GLPI 11 et PHP 8.4. Il utilise l'orchestrateur natif Migration pour la création de la base de données et le hook moderne pre_item_add pour une injection de texte sécurisée.

Activer/Désactiver : Les utilisateurs peuvent facilement activer ou désactiver leur signature automatique sans supprimer le texte.

Prérequis
GLPI >= 11.0.0

PHP >= 8.4

Installation
Téléchargez la dernière version.

Extrayez le dossier et renommez-le exactement en stisignature.

Déplacez le dossier dans votre répertoire de plugins GLPI : glpi/plugins/stisignature.

Connectez-vous à GLPI en tant que Super-Admin.

Naviguez vers Configuration > Plugins.

Cliquez sur Installer puis sur Activer.

Utilisation
Cliquez sur l'icône de votre profil dans le coin supérieur droit et sélectionnez Mes Préférences.

Naviguez vers le nouvel onglet Ma Signature (Tickets).

Sélectionnez "Oui" pour activer la signature.

Tapez et formatez votre signature dans l'éditeur de texte enrichi.

Cliquez sur Sauvegarder. Votre signature apparaîtra désormais automatiquement au bas de vos suivis et solutions.

Author: Daniel Correa
License: GPLv2+

