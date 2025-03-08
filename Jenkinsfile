pipeline {
    agent any
    triggers {
        githubPush() // Activa el pipeline cuando haya un push en el repo
    }
    environment {
        REGISTRY_URL = "tu-registro-harbor.com"  // Cambia esto por tu registro
        IMAGE_NAME = "java-app"
        IMAGE_TAG = "latest"
        REPO_URL = "${env.GIT_URL}"
        BRANCH_NAME = "${params.BRANCH_NAME}"
    }

    stages {
        stage('Build & Test') {
            steps {
                script {
                    sh './gradlew clean build test'
                }
            }
        }

        stage('SonarQube Analysis') {
            steps {
                script {
                    withSonarQubeEnv('SonarQube') { 
                        sh './gradlew sonarqube'
                    }
                }
            }
        }

        stage('Package Jar') {
            steps {
                sh './gradlew bootJar'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    sh "docker build -t $REGISTRY_URL/$IMAGE_NAME:$IMAGE_TAG ."
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    sh "docker login $REGISTRY_URL -u usuario -p contraseña"
                    sh "docker push $REGISTRY_URL/$IMAGE_NAME:$IMAGE_TAG"
                }
            }
        }
    }
    
    post {
        success {
            echo "✅ CI completado exitosamente"
        }
        failure {
            echo "❌ Falló el CI"
        }
    }
}
