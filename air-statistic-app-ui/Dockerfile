FROM node:14.15.1 as build

# Set the working directory
WORKDIR /usr/local/app

# Add the source code to app
COPY ./ /usr/local/app/

# Install all the dependencies
RUN npm install

# Generate the build of the application
RUN npm run build

# Use official nginx image as the base image
FROM nginx:1.21.4

# Copy the build output to replace the default nginx contents.
COPY --from=build /usr/local/app/dist/air-statistic-app-ui /usr/share/nginx/html

# Expose port 80
EXPOSE 80
