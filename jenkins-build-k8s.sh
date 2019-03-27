#!/bin/bash
REGION=us-east-1
REPOSITORY_NAME=hello_docker
REPOSITORY_URI=`aws ecr describe-repositories --repository-names ${REPOSITORY_NAME} --region ${REGION} | jq .repositories[].repositoryUri | tr -d '"'`
## 629309645488.dkr.ecr.us-east-1.amazonaws.com/hello_docker
## login
# docker login -u w3gong -p ${DOCKER_HUB}
$(aws ecr get-login --no-include-email --region=us-east-1)
## build and publish image
TAG_NAME=${REPOSITORY_NAME}:v_${BUILD_NUMBER}
IMG_NAME=${REPOSITORY_URI}:v_${BUILD_NUMBER}
docker build --tag=${TAG_NAME} .
docker tag ${TAG_NAME} ${IMG_NAME}
docker push ${IMG_NAME}
## deploy to Kubernetes
kubectl set image deployment/hello_docker hello_docker=${IMG_NAME}