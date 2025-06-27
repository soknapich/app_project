pipeline {
  agent {
    docker {
      image 'docker:24.0.5-cli' // Or latest docker CLI image
      args '-v /var/run/docker.sock:/var/run/docker.sock'
    }
  }
  stages {
    stage('Start Laravel Stack') {
      steps {
        sh '''
          docker compose down || true
          docker compose up -d
        '''
      }
    }

    stage('Check NGINX') {
      steps {
        sh 'curl -I http://localhost:8050 || true'
      }
    }
  }
}
