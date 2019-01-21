hello-world
===========

[![Deploy to Docker Cloud](https://files.cloud.docker.com/images/deploy-to-dockercloud.svg)](https://cloud.docker.com/stack/deploy/)

Sample docker image to test docker deployments

## Running locally

Build and run using Docker Compose:

	$ git clone https://github.com/docker/dockercloud-hello-world
	$ cd dockercloud-hello-world
	$ docker-compose up


## Deploying to Docker Cloud

[Install the Docker Cloud CLI](https://docs.docker.com/docker-cloud/tutorials/installing-cli/)

	$ docker login
	$ docker-cloud stack up

Hello world!

## Test

test 1: 
	2019-01-20
test 2: 
	cluster name was wrong, should be "getting-started"
test 3:
	step 7.1.i (https://docs.aws.amazon.com/AWSGettingStartedContinuousDeliveryPipeline/latest/GettingStarted/CICD_Jenkins_Pipeline.html) is wrong
#!/bin/bash
## DOCKER_LOGIN=`aws ecr get-login --region us-west-2`
DOCKER_LOGIN=`aws ecr get-login --no-include-email`
${DOCKER_LOGIN}

test 4:
	aws config on jenkins docker
