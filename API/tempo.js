async function tempo(request, response) {
    const dynamicDate  = new Date();

    const subscribersResponse = await fetch("https://api.convertkit.com/v3/forms?api_key=<your_public_api_key>")

    const subscribersResponseJson = await subscribersResponse.jason();
    const inscritos = subscribersResponseJson.total_subscribers;


    response.json({
        date: dynamicDate.toGMTString(),
        inscritos: inscritos
      })


}

export default tempo;