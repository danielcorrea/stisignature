# GLPI STI Signature

Plugin para **GLPI 11** que permite aos técnicos configurar assinaturas personalizadas e adicioná-las automaticamente aos **Acompanhamentos ITIL** e **Soluções de Chamados**.

🌎 **Languages:**
🇧🇷 [Português](#-português-brasil) · 🇬🇧 [English](#-english) · 🇪🇸 [Español](#-español) · 🇫🇷 [Français](#-français)

---

## 🇧🇷 Português (Brasil)

### Visão Geral

O **STI Signature** é um plugin leve, seguro e totalmente integrado ao **GLPI 11**.

Ele permite que técnicos e equipes de suporte configurem assinaturas automáticas e personalizadas, que são adicionadas automaticamente aos seus **Acompanhamentos ITIL** e **Soluções de Chamados**.

### ✨ Características

* **Configuração por usuário**
  Cada técnico gerencia sua própria assinatura através de uma nova aba em **Minhas configurações** no GLPI.

* **Editor de texto rico**
  Integração com o editor nativo **TinyMCE** do GLPI, permitindo formatação HTML, negrito, cores, imagens e outros recursos de texto rico.

* **Compatível com GLPI 11**
  Desenvolvido especificamente para a arquitetura do GLPI 11 e **PHP 8.4**.

* **Integração com a arquitetura nativa do GLPI**
  Utiliza o orquestrador nativo `Migration` para criação e atualização do banco de dados e o hook `pre_item_add` para a inserção segura das assinaturas.

* **Ativar / Desativar**
  O usuário pode ativar ou desativar sua assinatura sem perder o conteúdo previamente configurado.

### 📋 Requisitos

| Componente | Requisito   |
| ---------- | ----------- |
| GLPI       | `>= 11.0.0` |
| PHP        | `>= 8.4`    |

### 📦 Instalação

1. Baixe a versão mais recente em **Releases**.
2. Extraia o arquivo do plugin.
3. Renomeie a pasta para exatamente:

   ```text
   stisignature
   ```
4. Mova a pasta para o diretório de plugins do GLPI:

   ```text
   glpi/plugins/stisignature
   ```
5. Acesse o GLPI com uma conta **Super-Admin**.
6. Acesse:
   **Configurar → Plugins**
7. Clique em **Instalar** e, em seguida, em **Ativar**.

### 📝 Uso

1. Clique no ícone do seu perfil no canto superior direito.
2. Selecione **Minhas configurações**.
3. Acesse a aba **Minha Assinatura (Chamados)**.
4. Selecione **Sim** para ativar a assinatura.
5. Digite e formate sua assinatura utilizando o editor de texto rico.
6. Clique em **Salvar**.

A assinatura será adicionada automaticamente ao final dos **Acompanhamentos** e **Soluções** criados pelo usuário.

---

## 🇬🇧 English

### Overview

**STI Signature** is a lightweight, secure, and fully integrated plugin for **GLPI 11**.

It allows technicians and support staff to configure personalized automatic signatures that are automatically appended to their **ITIL Follow-ups** and **Ticket Solutions**.

### ✨ Features

* **Per-user configuration**
  Each technician manages their own signature through a new tab in GLPI's **My Settings**.

* **Rich text editor**
  Fully integrated with GLPI's native **TinyMCE** editor, supporting HTML formatting, bold text, colors, images, and other rich-text features.

* **GLPI 11 ready**
  Specifically developed for the GLPI 11 architecture and **PHP 8.4**.

* **Native GLPI architecture**
  Uses the native `Migration` orchestrator for database creation and updates, and the `pre_item_add` hook for secure signature injection.

* **Enable / Disable**
  Users can enable or disable their automatic signature without losing the saved content.

### 📋 Requirements

| Component | Requirement |
| --------- | ----------- |
| GLPI      | `>= 11.0.0` |
| PHP       | `>= 8.4`    |

### 📦 Installation

1. Download the latest version from **Releases**.
2. Extract the plugin archive.
3. Rename the folder exactly to:

   ```text
   stisignature
   ```
4. Move the folder to your GLPI plugins directory:

   ```text
   glpi/plugins/stisignature
   ```
5. Log in to GLPI as a **Super-Admin**.
6. Go to:
   **Setup → Plugins**
7. Click **Install**, then **Enable**.

### 📝 Usage

1. Click your profile icon in the top-right corner.
2. Select **My Settings**.
3. Open the **My Signature (Tickets)** tab.
4. Select **Yes** to enable the signature.
5. Enter and format your signature using the rich text editor.
6. Click **Save**.

The signature will automatically be appended to the user's **Follow-ups** and **Solutions**.

---

## 🇪🇸 Español

### Descripción General

**STI Signature** es un plugin ligero, seguro y totalmente integrado con **GLPI 11**.

Permite a los técnicos y al personal de soporte configurar firmas automáticas y personalizadas que se añaden automáticamente a sus **Seguimientos ITIL** y **Soluciones de Tickets**.

### ✨ Características

* **Configuración por usuario**
  Cada técnico gestiona su propia firma desde una nueva pestaña en **Mis Ajustes** de GLPI.

* **Editor de texto enriquecido**
  Integración completa con el editor nativo **TinyMCE** de GLPI, con soporte para formato HTML, negrita, colores, imágenes y otros recursos de texto enriquecido.

* **Preparado para GLPI 11**
  Desarrollado específicamente para la arquitectura de GLPI 11 y **PHP 8.4**.

* **Arquitectura nativa de GLPI**
  Utiliza el orquestador nativo `Migration` para la creación y actualización de la base de datos y el hook `pre_item_add` para la inserción segura de las firmas.

* **Activar / Desactivar**
  Los usuarios pueden activar o desactivar su firma automática sin perder el contenido guardado.

### 📋 Requisitos

| Componente | Requisito   |
| ---------- | ----------- |
| GLPI       | `>= 11.0.0` |
| PHP        | `>= 8.4`    |

### 📦 Instalación

1. Descargue la última versión desde **Releases**.
2. Extraiga el archivo del plugin.
3. Renombre la carpeta exactamente como:

   ```text
   stisignature
   ```
4. Mueva la carpeta al directorio de plugins de GLPI:

   ```text
   glpi/plugins/stisignature
   ```
5. Inicie sesión en GLPI como **Super-Admin**.
6. Acceda a:
   **Configuración → Plugins**
7. Haga clic en **Instalar** y luego en **Activar**.

### 📝 Uso

1. Haga clic en el icono de su perfil en la esquina superior derecha.
2. Seleccione **Mis Ajustes**.
3. Acceda a la pestaña **Mi Firma (Casos)**.
4. Seleccione **Sí** para activar la firma.
5. Escriba y formatee su firma utilizando el editor de texto enriquecido.
6. Haga clic en **Guardar**.

La firma se añadirá automáticamente al final de los **Seguimientos** y **Soluciones** creados por el usuario.

---

## 🇫🇷 Français

### Aperçu

**STI Signature** est un plugin léger, sécurisé et entièrement intégré à **GLPI 11**.

Il permet aux techniciens et au personnel d'assistance de configurer des signatures automatiques et personnalisées qui sont ajoutées automatiquement à leurs **Suivis ITIL** et **Solutions de Tickets**.

### ✨ Fonctionnalités

* **Configuration par utilisateur**
  Chaque technicien gère sa propre signature depuis un nouvel onglet dans **Mes Préférences** de GLPI.

* **Éditeur de texte enrichi**
  Intégration complète avec l'éditeur natif **TinyMCE** de GLPI, avec prise en charge du formatage HTML, du texte en gras, des couleurs, des images et d'autres fonctionnalités de texte enrichi.

* **Compatible avec GLPI 11**
  Développé spécifiquement pour l'architecture de GLPI 11 et **PHP 8.4**.

* **Architecture native de GLPI**
  Utilise l'orchestrateur natif `Migration` pour la création et la mise à jour de la base de données ainsi que le hook `pre_item_add` pour l'injection sécurisée des signatures.

* **Activer / Désactiver**
  Les utilisateurs peuvent facilement activer ou désactiver leur signature automatique sans supprimer le contenu enregistré.

### 📋 Prérequis

| Composant | Prérequis   |
| --------- | ----------- |
| GLPI      | `>= 11.0.0` |
| PHP       | `>= 8.4`    |

### 📦 Installation

1. Téléchargez la dernière version depuis **Releases**.
2. Extrayez l'archive du plugin.
3. Renommez le dossier exactement comme suit :

   ```text
   stisignature
   ```
4. Déplacez le dossier dans le répertoire des plugins de GLPI :

   ```text
   glpi/plugins/stisignature
   ```
5. Connectez-vous à GLPI avec un compte **Super-Admin**.
6. Accédez à :
   **Configuration → Plugins**
7. Cliquez sur **Installer**, puis sur **Activer**.

### 📝 Utilisation

1. Cliquez sur l'icône de votre profil dans le coin supérieur droit.
2. Sélectionnez **Mes Préférences**.
3. Accédez à l'onglet **Ma Signature (Tickets)**.
4. Sélectionnez **Oui** pour activer la signature.
5. Saisissez et formatez votre signature avec l'éditeur de texte enrichi.
6. Cliquez sur **Sauvegarder**.

La signature sera automatiquement ajoutée à la fin des **Suivis** et **Solutions** créés par l'utilisateur.

---

## 👤 Author

**Daniel Correa**

## 📄 License

This project is licensed under the **GPLv3** license.
