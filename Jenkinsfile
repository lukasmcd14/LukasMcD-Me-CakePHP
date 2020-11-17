pipeline {
  agent any
  stages {
    stage('Build Assets') {
      steps {
        sh 'npm install'
        sh 'npm run build'
      }
    }

    stage('Deploy') {
      steps {
        sh 'cp -rf * /var/www/beta.lukasmcd.me/'
        sh '''cd /var/www/beta.lukasmcd.me
composer install'''
        sh '# chown -R www-data:www-data /var/www/beta.lukasmcd.me/*'
      }
    }

  }
}