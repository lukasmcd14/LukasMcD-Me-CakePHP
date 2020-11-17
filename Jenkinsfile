pipeline {
  agent {
    node {
      label '15.2-alpine'
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