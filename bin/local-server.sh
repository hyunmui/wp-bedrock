#!/bin/bash

DIR="$(cd "$(dirname "$0")" && pwd -P)"

wp server --host=localhost --port=8080 --docroot=$DIR/../web
