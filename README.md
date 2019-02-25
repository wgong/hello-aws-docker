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

## Demo - Continuous Delivery

```

login to devopsgong@osboxes:
$ cd ~/GitHub/hello-aws-docker

$ vi www/index.php   # change company name

$ git status
$ git add .; git commit -m "update index.php"; git push

view Jenkins job log at http://jenkins.s8s.cloud/blue/organizations/jenkins/hello-aws-docker-git/activity

view docker cloud homepage at http://hello.s8s.cloud/

```




## TROUBLESHOOT

see ./tmp/create-service.md

## TEST
=======
## Docs
add Insight week #2 demo slides 

## Test

* test 1: 
	2019-01-20
* test 2: 
	cluster name was wrong, should be "getting-started"
* test 3:
	step 7.1.i (https://docs.aws.amazon.com/AWSGettingStartedContinuousDeliveryPipeline/latest/GettingStarted/CICD_Jenkins_Pipeline.html) is wrong
	```
	#!/bin/bash
	DOCKER_LOGIN=`aws ecr get-login --no-include-email --region us-east-1`
	${DOCKER_LOGIN}
	```

* test 4:
	aws config on jenkins docker

* test 5:
	add --region

* test 6:
	hit issue - https://issues.jenkins-ci.org/browse/JENKINS-41020

* test 9:
	did lots of troubleshooting (/home/devopsgong/GitHub/hello-aws-docker/tmp/create-service.md)

* test 10:
	add shell script to build and publish docker image (not using plugin)
        workaround - jenkins-build.sh 

* test 11:
	random test
