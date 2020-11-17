pipeline {
  agent {
    docker {
      image 'node:15.2-alpine'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh 'npm install'
        sh 'npm run build'
      }
    }

  }
}