pipeline {
  agent any
  stages {
    stage('Build Assets') {
      steps {
        sh 'npm install'
        sh 'npm run build'
      }
    }

  }
}