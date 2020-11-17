pipeline {
  agent {
    node {
      label 'NodeJS'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh '''npm install
npm run build'''
      }
    }

  }
}