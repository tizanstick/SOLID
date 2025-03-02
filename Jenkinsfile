pipeline {
    agent any
    triggers {
        githubPush() // Activa el pipeline cuando haya un push en el repo
    }
    stages {
        stage('Checkout') {
            steps {
                echo 'Clonando el repositorio....'
                checkout scm
            }
        }
        stage('Build') {
            steps {
                echo 'Compilando el código...'
            }
        }
        stage('Test') {
            steps {
                echo 'Ejecutando pruebas...'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Desplegando aplicación...'
            }
        }
    }
    post {
        always {
            echo 'Pipeline finalizado.'
        }
    }
}
