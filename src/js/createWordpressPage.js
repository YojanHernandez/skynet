export async function createWordPressPage(pageTitle, pageContent) {
    const url = '/wp-json/custom-theme/v1/create-page';

    const data = {
        title: pageTitle,
        content: pageContent
    };

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        console.log('Menu item created successfully:', response);
    } catch (error) {
        console.error('Error creating menu item:', error);
    }
}
