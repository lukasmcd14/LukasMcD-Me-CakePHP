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
        sh 'cp -rf * /var/www/beta.lukasmcd.me/'
      }
    }

  }
}