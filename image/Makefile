.DEFAULT_GOAL := build

IMAGE_NAME=quay.io/slauger/hello-openshift

all: build push

build:
	docker build -t $(IMAGE_NAME) .

push:
	docker push $(IMAGE_NAME)

run:
	docker run --rm -p 8080:8080 -it $(IMAGE_NAME)
