## CloudBees tester
This repository is a simple way to debug Cloudbees feature flags.
It uses a already created flag in CloudBees UI called `thisIsATestFlag`.
Feel free to change it to whatever you want.

## Installation
Follow the steps below to install and run the application.
## Clone this repo:
    
```bash
    git clone git@github.com:leobeal-cpi/cloudbees-usage.git
    cd cloudbees-usage
```

## Install dependencies
```bash
    composer install
```

## Set the Cloudbees API key
```bash
    export cloudbees_key=<QA-KEY> # Replace <QA-KEY> with your Cloudbees API key. Find it under "Installation instructions" in Cloudbees UI.
```

### Run the script

```bash
    php index.php
```
