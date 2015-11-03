# Objectives

1. Demonstrate how we can use Jenkins to do continuous integrationt testing

---

# Setup

  * You will need:
    * A dev machine with:
      * Docker
      * Docker Compose
      * Checkout of this repo
    * An ACS cluster
    * A CI/CD server in that cluster
      * Must have logged into Docker Hub with `docker login`

---

# Starting the demo

  * `sudo ./demo/demo140_continuos_integration/prepare.sh`
  * On startup we will have a single container running
    * Jenkins
  * This will monitor Git for changes and run tests when necessary

---

# View the demo application on the staging cluster

  * http://STAGING_HOST
  * A simple PHP web front-end with a Java Backend (REST API)
  * Front end is load balanced

---

# Make a change to the application (on the Dev machine)

  * `vi web/www/html/index.php`
    * Edit the first h1
  * `docker-compose -f docker-compose-dev.yml up -d`
    * Note how the web container is rebuilt and restarted
  * http://localhost
  * Looks good, lets push the changes so all devs have them
    * git commit -am "trigger a build for the MVP demo"

---

# Docker brings us easy scaling

  * `docker-compose scale web=3`
  * http://localhost (a few times)
  * Look how our load balancer is now working across the three web servers

## Details

This slide is not strictly necessary it's really only here to fill
time while the CI system runs in the background.

---

# About the Staging Cluster

  * Running on the dev machine can only take us so far
  * Need to run on a staging cluster
    * Test HA and more

---

# Introduction to Azure Container Service

  * A convenient way to create a cluster of Docker Hosts
  * Highliy available
  * Application Orchestration

---

# Deployment options

  * Portal
  * ARM

---

# ACS as a Staging Cluster

  * The default orchestrator
  * http://YOURCLUSTER:5050
  * Note how we have the application running in staging already
    * We'll look at how that happened in a moment
  * http://STAGING_HOST
    * See the change we made!

---

# How did that happen?

  * We have a CI/CD server in the cluster
  * http://YOUR_CI_CD:8081
  * It detected changes in GitHub
  * Built and tested the application
  * Published the updated containers to Docker Hub
    * With "stage" tag
  * Instructucted Azure Container Service to update the staged app

